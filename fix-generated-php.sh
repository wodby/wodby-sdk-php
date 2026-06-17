#!/usr/bin/env bash

set -euo pipefail

find ./SwaggerClient-php/lib -name '*.php' -print0 | xargs -0 perl -0pi -e '
    s/\barray \$([A-Za-z_][A-Za-z0-9_]*) = null/?array \$$1 = null/g;
    s/\b(ClientInterface|Configuration|HeaderSelector) \$([A-Za-z_][A-Za-z0-9_]*) = null/?$1 \$$2 = null/g;
'
