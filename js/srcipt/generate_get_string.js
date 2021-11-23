// Генерация get строки из массива

const getQueryArray = (obj, path = [], result = []) =>
    Object.entries(obj).reduce((acc, [k, v]) => {
        path.push(k);

        if (v instanceof Object) {
            getQueryArray(v, path, acc);
        } else {
            acc.push(`${path.map((n, i) => i ? `[${n}]` : n).join('')}=${v}`);
        }

        path.pop();

        return acc;
    }, result);

const getQueryString = obj => getQueryArray(obj).join('&');


data = {
    userId: '123456',
    transactionId: 'ABCD123456', // merchant defined value
    name: 'Имя на русском',
}

data = getQueryString(data);
console.log(data);//userId=123456&transactionId=ABCD123456&name=Имя на русском