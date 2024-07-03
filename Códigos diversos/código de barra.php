<?php
$file_name = "barcodes/barcode.png";
print(file_exists($file_name));
$reader = new BarcodeReader($file_name);
while ($reader->read()) {
    print($reader->getCodeText(false));
    print("\n");
    print($reader->getCodeTypeName());
}
$reader->close();
