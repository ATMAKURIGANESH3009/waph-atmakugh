var amount = prompt("Enter the total amount in $") 
if (amount > 5000) {
    let discount = 20;
    pay = (discount/100)*parseInt(amount);
    let total = (amount - pay);
    console.log("You need to pay", total);
} else if (amount > 3500 && amount <= 5000) {
    let discount = 15;
    pay = (discount/100)*parseInt(amount);
    let total = (amount - pay);
    console.log("You need to pay", total);
} else if (amount > 2000 && amount <= 3500) {
    let discount = 10;
    pay = (discount/100)*parseInt(amount);
    let total = (amount - pay);
    console.log("You need to pay", total);
} else if (amount > 1000 && amount <= 2000) {
    let discount = 5;
    pay = (discount/100)*parseInt(amount);
    let total = (amount - pay);
    console.log("You need to pay", total);
} else {
    console.log("You need to pay entire amount");
    console.log("Total pay:", amount);
}

