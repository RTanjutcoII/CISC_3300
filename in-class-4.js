

const array = [1,2,3,4,5];

for (let i = 0; i < array.length; i++) {
    if ((i + 1) % 2 == 0) {
        console.log(array[i] + " is even!")
    }
    else {
        console.log(array[i] + " is odd!")
    }
}