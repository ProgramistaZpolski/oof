/**
 * @author Piotr Badełek
 * @license MIT
 */
"use strict";
onerror = (b, i, g, o, O, f) => {
	f = O.stack;
	O = window._oof || "/error.php";
	fetch(`${O}?a=${b}&b=${i}&c=${g}&d=${o}&e=${f}`);
};
