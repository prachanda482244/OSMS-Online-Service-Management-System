let date = "2022-sep-13";
class greet {
    msg() {
        return `Happy programmer's day `;
    }
    returnDate() {
        return `${date}`;
    }
    programmerMsg() {
        return `Keep Coding keep building \n Happy Coding`;
    }
}
let obj = new greet();
let msg = obj.msg();
let dateObj = obj.returnDate();
let pMsg = obj.programmerMsg();

function timeOut(value, duration) {
    setTimeout(() => {
        console.log(value);
    }, duration);
}
timeOut(msg, 1000);
timeOut(dateObj, 2000);
timeOut(pMsg, 3000);