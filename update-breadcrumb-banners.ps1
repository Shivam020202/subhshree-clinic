# PowerShell script to convert data-bg-src to inline style for breadcrumb banners
$files = Get-ChildItem -Path "a:\Freelance\subhshree-html" -Filter "*.php" -File

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # Pattern to match: <div class="breadcumb-wrapper " data-bg-src="path/to/image.ext">
    # Replace with: <div class="breadcumb-wrapper" style="background-image: url('path/to/image.ext');">
    $pattern = '<div class="breadcumb-wrapper\s*"\s*data-bg-src="([^"]+)">'
    $replacement = '<div class="breadcumb-wrapper" style="background-image: url(''$1'');">'
    
    if ($content -match $pattern) {
        $newContent = $content -replace $pattern, $replacement
        Set-Content -Path $file.FullName -Value $newContent -NoNewline
        Write-Host "Updated: $($file.Name)" -ForegroundColor Green
    }
}

Write-Host "`nAll files processed!" -ForegroundColor Cyan
