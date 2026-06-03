# GitHub Publish Commands

Replace `YOUR-USERNAME` with your GitHub username.

```bash
cd bu-mis-unified-suite

git init
git add .
git commit -m "Initial release: BU MIS Unified Suite"

git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/bu-mis-unified-suite.git
git push -u origin main
```

## Update Existing Repository

```bash
git status
git add .
git commit -m "Update documentation and plugin structure"
git push
```
