#!/bin/bash
set -e

# Set permissions for filebeat.yml
chown root:root /usr/share/filebeat/filebeat.yml
chmod 600 /usr/share/filebeat/filebeat.yml

# Execute the original filebeat entry point
exec /usr/local/bin/docker-entrypoint -e
