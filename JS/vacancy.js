 document.body.onclick = (event) => {
    const elem = event.target;
    if (elem.classList.contains('CopyLink')) {
        // navigator.clipboard.writeText('Hi');
        unsecuredCopyToClipboard('hi');
    }
 }

// function Copy() {
//     navigator.clipboard.writeText('Hi');
// }

