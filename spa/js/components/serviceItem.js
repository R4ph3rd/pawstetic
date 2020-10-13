export default {
    template: `<div class="serviceItem">
        <img :src="icon">

        <div class="announce">
            <h4>{{title}}</h4>
            <p>{{content}}</p>
        </div>
        
        <span class="pale-blue"></span>
        <div class="price">
            <p>$ {{price}}</p>
            <p>{{honoraries}}</p>
        </div>
    </div>`,
    props:{
        icon:{
            type: String,
            required: false,
            default: 'https://source.unsplash.com/random/150x150'
        },
        title:{
            type: String,
            required: true
        },
        content:{
            type: String,
            required: true
        },
        price:{
            type: [String, Number],
            required: true
        },
        honoraries:{
            type: String,
            required: false,
            default: () => 'per 30 min walk'
        }
    }
}