function reverseWords(str) {
    let strArr = str.split(' ');
    let strArrRev = strArr.reverse();
    return strArrRev.join(' '); // reverse those words
}

console.log(reverseWords("hello world!"));