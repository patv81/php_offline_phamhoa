str ="AAAAACEEELLRRRTT";
str2 ="SATORAREPOTENETOPERAROTAS";

function wordSquare(str) {
    size = Math.sqrt(str.length);
    //console.log(size);
    if (size % 1 != 0) return false;
    arr = str.split("").sort().join("").match(/(.)\1+/gm);
    console.log(arr);
    for (let i = 0; i < arr.length; i++) {
        if (arr[i].length % 2 == 1) {
            return false;
        }
    }
    return true;
}
arr = str.match(/.{5}/gm);
console.log(ff(str));