const product = [
    {
        id: 0,
        image: './mobile/iphone11.jpg', 
        title: 'Apple iPhone 11 128Gb Slim Box черный',
        price: 261531
    },
    {
        id: 1,
        image: './mobile/iphone15.jpeg', 
        title: 'Apple iPhone 15 Pro Max 256Gb синий',
        price: 680195
    },
    {
        id: 2,
        image: './mobile/iphone13.jpg', 
        title: 'Apple iPhone 13 128Gb белый',
        price: 321563
    },
    {
        id: 3,
        image: './mobile/iphone14.jpg', 
        title: 'Apple iPhone 14 128Gb черный',
        price: 372726
    },
    {
        id: 4,
        image: './mobile/samsung34.jpg', 
        title: 'Samsung Galaxy A34 5G 6 ГБ/128 ГБ черный',
        price: 113021
    },
    {
        id: 5,
        image: './mobile/xiaomi.jpeg', 
        title: 'Xiaomi Redmi 12 4G 8 ГБ/256 ГБ черный',
        price: 77009
    },
    {
        id: 6,
        image: './mobile/watch.jpg', 
        title: 'Apple Watch SE 2 Gen (2022) 44 мм черный',
        price: 155000
    },
    {
        id: 7,
        image: './mobile/iphone12.jpg', 
        title: 'Apple iPhone 12 128Gb черный',
        price: 304895
    },
    {
        id: 8,
        image: './mobile/poco.jpg', 
        title: 'Poco F5 12 ГБ/256 ГБ черный',
        price: 192802
    },
]

const categories  = [...new Set(product.map((item) => {return item}))]

document.getElementById('search-box').addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filterData = categories.filter((item) => {
        return(
            item.title.toLocaleLowerCase().includes(searchData)
        )
    })
    displayItem(filterData)
});

const displayItem = (items)=>{
    document.getElementById('root').innerHTML = items.map((item)=>{
        var {image, title, price} = item;
        return(
            `<div class='box'>
            <div class='img-box'>
            <img class = 'images' src = ${image}></img>
            </div>
            <div class ='bottom'>
            <p>${title}</p>
            <h2>${price} ₸<h2>
            <button>Add to cart</button>
            </div>
            </div>`
        )
    }).join('')
};
displayItem(categories);