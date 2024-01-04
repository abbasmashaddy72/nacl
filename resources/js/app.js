import "../css/app.scss";

import "./bootstrap";
import { toggleMenu, topFunction } from "./custom/custom";
import { easy_background } from "./custom/easy_background";

import "./custom/plugins";

window.topFunction = topFunction;
window.toggleMenu = toggleMenu;
window.easy_background = easy_background;

window.addEventListener("popstate", function (event) {
    window.location.reload();
});
