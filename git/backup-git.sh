#!/bin/sh
# A script to backup Github repositories to local by Rong Zhuang.
# https://github.com/jojozhuang/bash-scripts

# where should the files be saved
BACKUP_PATH="/volume1/Documents/dev"

# GitHub API URL
URL_PUBLIC="https://api.github.com/users/jonathantisseau/repos" # public repositories only
URL_PRIVATE="https://api.github.com/user/repos" # including private repositories

# token from https://github.com/settings/tokens
OAUTH_TOKEN=""

# number of repositories
COUNT=0

# create backup directory
NOW=$(date '+%F_%H%M%S')
mkdir "${BACKUP_PATH}/${NOW}" -p
echo "Create backup directory: ${BACKUP_PATH}/${NOW}"

fetch_fromUrl() {
    if [ -z "$OAUTH_TOKEN" ]
    then
      echo "Fetching public respositories from ${URL_PUBLIC}"
      REPOS=`curl "${URL_PUBLIC}" | jq -r '.[] | "\(.name),\(.full_name),\(.private),\(.html_url)"'`
    else
      echo "Fetching all repositories from ${URL_PRIVATE}"
      REPOS=`curl -H "Authorization: token ${OAUTH_TOKEN}" -s "${URL_PRIVATE}" | jq -r '.[] | "\(.name),\(.full_name),\(.private),\(.html_url)"'`
    fi
    for REPO in $REPOS
    do
        let COUNT++
        REPONAME=`echo ${REPO} | cut -d ',' -f1`
        REPOFULLNAME=`echo ${REPO} | cut -d ',' -f2`
        PRIVATEFLAG=`echo ${REPO} | cut -d ',' -f3`
        ARCHIVEURL=`echo ${REPO} | cut -d ',' -f4`
        ARCHIVEURL="${ARCHIVEURL}/archive/master.zip"
        FILEPATH="${BACKUP_PATH}/${NOW}/${REPONAME}.zip"
        echo ${ARCHIVEURL}
        curl -H "Authorization: token ${OAUTH_TOKEN}" -L ${ARCHIVEURL} -o ${FILEPATH}
        echo "Saved to ${FILEPATH}"
    done
}

fetch_fromUrl
echo "$((COUNT)) repositories updated"