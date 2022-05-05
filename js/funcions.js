function estudiClick() {
    document.getElementById("cbutton").innerHTML = location.href = "./index.php?accio=syllabary";
}
/*
function typeclick() {
    document.getElementById("sHbutton").innerHTML = location.href = "./index.php?accio=syllabary";
    document.getElementById("sKbutton").innerHTML = location.href = "./index.php?accio=syllabary";
    document.getElementById("sJbutton").innerHTML = location.href = "./index.php?accio=syllabary";

        var syll;
    if(document.getElementById("sHbutton").innerHTML){
        location.href = "./index.php?accio=syllabary";
        return 1;
    }
    if(document.getElementById("sKbutton").innerHTML){
        location.href = "./index.php?accio=syllabary";
        return 2;
    }
    if(document.getElementById("sJbutton").innerHTML){
        location.href = "./index.php?accio=syllabary";
        return 3;
    }

}

function randWithout($from, $to, $exceptions) {
    sort($exceptions); // lets us use break; in the foreach reliably
    $number = rand($from, $to - count($exceptions)); // or mt_rand()
    foreach ($exceptions as $exception) {
        if ($number >= $exception) {
            $number++; // make up for the gap
        } else{
            break;
        }
    }
    return $number;
}*/