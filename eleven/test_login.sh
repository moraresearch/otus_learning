#!/bin/bash
group=$(groups $PAM_USER | grep 'admin' | wc -l )
if [ $group = "0" ]; then
    if [ $(date +%a) != "Sun" ]; then
        if [ $(date +%a) != "Sat" ]; then
        exit 0
        else 
        exit 1
        fi
    else 
    exit 1
    fi
else 
exit 0
fi
