$("#repeater-form").repeater({
    show: function () {
        $(this).slideDown();
    },
    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    },
    isFirstItemUndeletable: true,
});
