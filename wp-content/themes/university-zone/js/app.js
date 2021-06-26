var items = document.querySelectorAll('.gallery a');
for (var i = 0; i < items.length; i++) {
    var item = items[i];
    item.setAttribute('data-fslightbox', 'gallery');
}
refreshFsLightbox();

var topMenuItems = document.querySelectorAll('#secondary-menu a');
for (var i = 0; i < topMenuItems.length; i++) {
    var item = topMenuItems[i];
    item.setAttribute('target', '_blank');
}

var themeLink = document.querySelectorAll('#extra_info a');
for (var i = 0; i < themeLink.length; i++) {
    var item = themeLink[i];
    item.setAttribute('target', '');
}