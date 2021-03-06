/*!
 * Filebroser_XH
 *
 * @author    Martin Damken <kontakt@zeichenkombinat.de>
 * @author    The CMSimple_XH developers <devs@cmsimple-xh.org>
 * @copyright 2011-2016 The CMSimple_XH developers (http://cmsimple-xh.org/?The_Team)
 * @license   GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.en.html)
 * @version   $Id$
 */

(function () {
    "use strict";

    /**
     * Finds all elements with a certain class name.
     *
     * @param {string} className
     *
     * @returns {array-like}
     */
    function findByClass(className) {
        var result;

        if (typeof document.getElementsByClassName !== "undefined") {
            result = document.getElementsByClassName(className);
        } else if (typeof document.querySelectorAll !== "undefined") {
            result = document.querySelectorAll("." + className);
        } else {
            result = [];
        }
        return result;
    }

    /**
     * Calls a function for each element of a collection.
     *
     * @param {array-like} collection
     * @param {Function}   func
     *
     * @returns {undefined}
     */
    function forEach(collection, func) {
        var i, n;

        for (i = 0, n = collection.length; i < n; i += 1) {
            func(collection[i]);
        }
    }

    /**
     * Registers an event listener.
     *
     * @param {EventTarget} target
     * @param {string}      event
     * @param {Function}    listener
     *
     * @returns {undefined}
     */
    function on(target, event, listener) {
        if (typeof target.addEventListener !== "undefined") {
            target.addEventListener(event, listener, false);
        } else if (typeof target.attachEvent !== "undefined") {
            target.attachEvent("on" + event, listener);
        }
    }

    /**
     * Prevents the default event handling.
     *
     * @param {Event} event
     *
     * @returns {undefined}
     */
    function preventDefault(event) {
        if (typeof event.preventDefault !== "undefined") {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }

    /**
     * Toggles the visibility of a form.
     *
     * @param {string} id
     *
     * @returns {undefined}
     */
    function togglexhfbForm(id) {
        var element = document.getElementById(id),
            isOpen = (element.style.display === "block"),
            forms = document.getElementsByTagName("fieldset"),
            i,
            form;

        for (i = 0; i < forms.length; i += 1) {
            form = forms[i];
            if (form.className === "xhfbform") {
                form.style.display = "none";
            }
        }
        if (!isOpen) {
            element.style.display = "block";
            element.getElementsByTagName("input")[0].focus();
        }
    }

    /**
     * Returns the basename of a file.
     *
     * @param {string} filename A file name.
     *
     * @returns {string}
     */
    function basename(filename) {
        return (/[^\/\\]+$/).exec(filename)[0];
    }

    /**
     * Returns whether a file exists in the current directory.
     *
     * @param {string} filename A file name.
     *
     * @returns {boolean}
     */
    function fileExists(filename) {
        var result = false;

        forEach(findByClass("xhfbfile"), function (element) {
            if (element.firstChild.nodeValue === filename) {
                result = true;
            }
        });
        return result;
    }

    /**
     * Obtains information, whether an already existing file should be uploaded.
     *
     * @param {HTMLFormElement} form
     * @param {string}          message
     *
     * @returns {boolean}
     */
    function checkUpload(form, message) {
        var filename = basename(form.elements.fbupload.value);

        if (fileExists(filename)) {
            return window.confirm(message);
        }
        return true;
    }

    /**
     * Shows the rename form.
     *
     * @param {string} renameForm
     * @param {string} messsage
     *
     * @returns {boolean}
     */
    function promptNewName(renameForm, message) {
        var oldNameInput = renameForm.renameFile,
            newName = window.prompt(message, oldNameInput.value);

        if (newName) {
            oldNameInput.value = newName;
        }
        return !!newName;
    }

    /**
     * Handles toggling of create folder form.
     *
     * @returns {undefined}
     */
    function onToggleCreateFolder() {
        togglexhfbForm('xhfbCreateDir');
    }

    /**
     * Handles toggling of upload file form.
     *
     * @returns {undefined}
     */
    function onToggleUploadFile() {
        togglexhfbForm('xhfbUploadFile');
    }

    /**
     * Handles submission of delete folder form.
     *
     * @returns {undefined}
     */
    function onDeleteFolder(event) {
        var target = event.target || event.srcElement,
            path = target.getAttribute("data-path"),
            message = FILEBROWSER.confirm_delete.replace("%s", path);

        if (!window.confirm(message)) {
            preventDefault(event);
        }
    }

    /**
     * Handles submission of rename file form.
     *
     * @returns {undefined}
     */
    function onRenameFile(event) {
        var target = event.target || event.srcElement,
            path = target.getAttribute("data-path"),
            message = FILEBROWSER.prompt_rename.replace("%s", path);

        if (!promptNewName(target, message)) {
            preventDefault(event);
        }
    }

    /**
     * Handles submission of delete file form.
     *
     * @returns {undefined}
     */
    function onDeleteFile(event) {
        var target = event.target || event.srcElement,
            path = target.getAttribute("data-path"),
            message = FILEBROWSER.confirm_delete.replace("%s", path);

        if (!window.confirm(message)) {
            preventDefault(event);
        }
    }

    /**
     * Handles submission of upload form.
     *
     * @returns {undefined}
     */
    function onUploadFile(event) {
        var target = event.target || event.srcElement;

        if (!checkUpload(target, FILEBROWSER.confirm_upload)) {
            preventDefault(event);
        }
    }

    /**
     * Handles choosing of file.
     *
     * @returns {undefined}
     */
    function onFileChoose(event) {
        var target = event.target || event.srcElement;

        window.setLink(
            target.getAttribute("data-file"),
            target.getAttribute("data-is-image")
        );
    }

    /*
     * Register event listeners.
     */
    on(window, "load", function () {
        forEach(findByClass("filebrowser_folder_toggle"), function (element) {
            on(element, "click", onToggleCreateFolder);
        });
        forEach(findByClass("filebrowser_upload_toggle"), function (element) {
            on(element, "click", onToggleUploadFile);
        });
        forEach(findByClass("filebrowser_delete_folder"), function (element) {
            on(element, "submit", onDeleteFolder);
        });
        forEach(findByClass("filebrowser_upload"), function (element) {
            on(element, "submit", onUploadFile);
        });
        forEach(findByClass("filebrowser_rename_file"), function (element) {
            on(element, "submit", onRenameFile);
        });
        forEach(findByClass("filebrowser_delete_file"), function (element) {
            on(element, "submit", onDeleteFile);
        });
        forEach(findByClass("xhfbfile"), function (element) {
            on(element, "click", onFileChoose);
        });
    });
}());
