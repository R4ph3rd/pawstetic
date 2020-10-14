export default {
    template: `<div class="petCard">
        <img :src="petImage" alt="picture of pet">

        <div>
            <h4>{{name}}</h4>
            <p>{{specie}}</p>
        </div>

        <span class="separator"></span>

        <div class="favorites">
            <p class="sectionLabel">Favorite things</p>
            <ul>
                <li  v-for="thing in things" :key="thing">{{thing}}</li>
            </ul>
        </div>

        <div class="caracteristics">
            <ul>
                <li>
                    <div class="icon" :class="gender"></div>
                    <p class="sectionLabel">{{gender}}</p>
                </li>
                <li>
                    <p class="number">{{age}}</p>
                    <p class="sectionLabel">years old</p>
                </li>
                <li>
                    <div class="icon" :class="isSpayed"></div>
                    <p class="sectionLabel">{{spayed}}</p>
                </li>
                <li>
                    <p class="number">{{weight}}</p>
                    <p class="sectionLabel">pounds</p>
                </li>
            </ul>
        </div>
    </div>`,
    data(){
        return {
            name: 'Ginger',
            specie: 'Golden retriever',
            petImage: 'https://source.unsplash.com/random/150x150',
            gender : 'male',
            age: 8,
            weight: '50 - 100',
            things : ['cool', 'genial', 'banane', 'mangue'],
            isSpayed : false,
        }
    },
    computed:{
        spayed(){
            return this.isSpayed ? 'spayed' : 'not spayed';
        }
    },
    mounted(){
        console.log(this.$el.children)
    }
}