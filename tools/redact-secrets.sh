#!/usr/bin/env bash
set -euo pipefail

echo "Scanning for possible secrets..."
grep -RInE "api_key|apikey|token|password|secret|Authorization|Bearer|10\.[0-9]+\.[0-9]+\.[0-9]+" .   --exclude-dir=.git   --exclude-dir=vendor   --exclude-dir=node_modules || true

echo "Review the above results manually before publishing."
