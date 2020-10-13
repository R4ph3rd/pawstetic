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
    computed:{
        style(){
            let style = '';
            if (this.rounded) style += 'rounded';
            if (this.outlined) style += 'outlined';

            return style;
        },
        label(){
            if (this.$slots) return this.$slots[0].text;
            return '';
        }
    }
}