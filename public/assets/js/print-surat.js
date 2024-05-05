function printPage() {
    window.print();
}

window.onload = function() {
    if ({{ $ttd->print ?? 'false' }}) {
        printPage();
    }
};