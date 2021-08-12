const toolbar = document.querySelector('.__cdm-toolbar');
const navigationsItems = document.querySelectorAll('.__cdm-navigation_item');
const inputKeyToggleToolbar = document.querySelector('.__cdm-input_key');

inputKeyToggleToolbar.value = localStorage.getItem('_cdm-key-show-toolbar');

inputKeyToggleToolbar.oninput = function () {
    if (this.value.length >= 1) {
        console.log(1)
        inputKeyToggleToolbar.value = this.value[0];
    }

    localStorage.setItem('_cdm-key-show-toolbar', this.value.toUpperCase());
}

document.onkeyup = (e) => {
    const keyFromLocalstorage = localStorage.getItem('_cdm-key-show-toolbar');
    const currentClickedKey = e.key;

    if (currentClickedKey.toUpperCase() === keyFromLocalstorage && e.ctrlKey) {
        toolbar.classList.toggle('active');
    }
}

for (let i = 0; i < navigationsItems.length; i++) {
    const e = navigationsItems[i];

    e.querySelector('.__cdm-navigation_item-btn').onclick = () => {
        const modal = e.querySelector('.__cdm-toolbar-navigation_modal');

        if (null !== modal) {
            if (modal.classList.contains('active')) {
                modal.classList.remove('active');
                e.classList.remove('active');
            } else {
                document.querySelectorAll('.__cdm-navigation_item').forEach(function (e) {
                    e.classList.remove('active');
                    e.querySelector('.__cdm-toolbar-navigation_modal').classList.remove('active');
                })

                modal.classList.add('active');
                e.classList.add('active');
            }
        }
    };
}