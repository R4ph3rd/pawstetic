export default {
    template: '<button :class="style">{{label}}</button>',
    props: {
        rounded: {
            type: Boolean,
            required: false
        },
        outlined: {
            type: Boolean,
            required: false
        },
    },
    data(){
        return {
            label: ''
        }
    },
    computed:{
        style(){
            let style = '';
            if (this.rounded) style += 'rounded';
            if (this.outlined) style += 'outlined';

            return style;
        }
    },
    mounted(){
        this.label = this.$slots.default[0].text;
    }
}