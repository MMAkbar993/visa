# Run this in PowerShell *outside* Cursor (e.g. Windows Terminal) so no Git lock.
# Fixes: "Connection was reset" / "hung up" when pushing (caused by 127MB video).

Set-Location $PSScriptRoot

# 1. Remove stale lock if any
if (Test-Path .git/index.lock) { Remove-Item -Force .git/index.lock }

# 2. Stop tracking the video (keep file on disk)
git rm --cached vid/upzone.mp4

# 3. Stage .gitignore and other changes
git add .gitignore
git add assets/css/style.css assets/images/Group.png assets/images/banner2.png assets/images/side.png

# 4. Amend the last commit to drop the video from history
git commit --amend -m "add" --no-edit

# 5. Increase HTTP buffer to avoid connection resets
git config http.postBuffer 524288000

# 6. Push to GitHub
git push -u origin main

Write-Host "`nDone. vid/upzone.mp4 is still on disk; host it separately (e.g. YouTube, CDN) and update index.php if needed."
