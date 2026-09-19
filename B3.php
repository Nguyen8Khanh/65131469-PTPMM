<?php
function snt($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++)
        if ($n % $i == 0) return false;
    return true;
}

function scp($n) {
    return $n >= 0 && sqrt($n) == (int)sqrt($n);
}

$N = rand(-100, 100);
echo "<h2>N = $N</h2>";

if ($N > 0) {

    echo "a) Ước số của $N: ";
    for ($i = 1; $i <= $N; $i++)
        if ($N % $i == 0) echo "$i ";

    echo "<br>b) $N " . (snt($N) ? "là" : "không") . " số nguyên tố";

    $tong = 0;
    for ($i = 2; $i < $N; $i++)
        if (snt($i)) $tong += $i;
    echo "<br>c) Tổng các SNT < $N: $tong";

    echo "<br>d) $N " . (scp($N) ? "là" : "không") . " số chính phương";

} else {
    echo "N không phải số dương!";
}
?>