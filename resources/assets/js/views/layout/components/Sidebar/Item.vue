<script>
export default {
    name:'MenuItem',
    functional:true,
    props:{
        icon:{
            type:String,
            default:''
        },
        title:{
            type:String,
            default:''
        }
    },
    render:function (createElement){
        var nodes=[];
        if(this.icon){
            nodes.push(createElement(
                'i',
                {
                    class:this.icon
                }
            ))
        }
        if(this.title){
            nodes.push(createElement(
                'span',
                
            ))
        }

        }
        // const {icon,title} = context.props
        // const vnodes=[]

        // if(icon){
        //     vnodes.push("<i class={(icon)}></i>")
        // }

        // if(title){
        //     vnodes.push("<span slot='title'>{(title)}</span>")
        // }
        // return vnodes
}
</script>
