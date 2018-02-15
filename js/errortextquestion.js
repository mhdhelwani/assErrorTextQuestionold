$().ready(function () {
    $("div.errortext").on('mouseup', function (e) {
        var selection = document.getSelection();
        var range = selection.getRangeAt(0);
        var nodeType = range.commonAncestorContainer.nodeType;
        if (nodeType == 3) {
            var parent = selection.anchorNode.parentElement;
            var peTagName =parent.tagName;
            if (peTagName.toLowerCase() == "span") {
                range.selectNode(parent);
                selectedText = range.toString();
                range.deleteContents();
                range.insertNode(document.createTextNode(selectedText));
            } else {
                    var selectedText = range.extractContents();
                    if (selectedText.textContent) {
                        var span = document.createElement("span");
                        span.className = "sel";
                        span.appendChild(selectedText);
                        range.insertNode(span);
                    }
            }
        }
        var context = $(selection.baseNode).closest("div.errortext");
        var valItem = context.find("input[type=hidden]");
        valItem.remove();
        context[0].innerHTML = context[0].innerHTML;
        valItem.val(context[0].innerHTML);
        context.append(valItem);
        selection.removeAllRanges();
        e.preventDefault();
        e.stopPropagation();
    });
});