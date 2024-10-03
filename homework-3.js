//Question 6
const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

const result = [];

for (let i = 0; i < cats.length; i++) {
    if (cats[i].adoptionStatus == 'available') {
        result.push(cats[i])
    }
}

console.log("I've adopted so many cats that I gotta list them! I've got ")

for (var i = 0; i < result.length - 1; i++) {
    console.log(result[i].name + " ")
}

console.log("and " + result[i].name + "!")


//Question 7
const randomNumber = Math.random() * 10
const output = randomNumber > 5 ? "Greater than five!" : "Less than five!"
console.log(output)

//Question 8
for (let i = 0; i < cats.length; i++) {
    console.log(cats[i].name)
    console.log(cats[i].adoptionStatus)
}

//Question 9
let int = 1
let str = '1'

if (int == str) {
    //equates an integer of 1 and a string of ‘1’ as true
}

if (int === str) {
    //equates an integer of 1 and a string of ‘1’ as false
}

//Question 10
const cats2 = cats.map( function (callback) {
    return callback.name + " is cute!"
})

console.log(cats2);