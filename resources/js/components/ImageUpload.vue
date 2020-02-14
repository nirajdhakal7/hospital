<template>
    <div class="container">
        <div ref="imageUpload" class="bg-dark py-3  text-center">Drop Zone </div>
    </div>
</template>

<script>

import Dropzone from 'dropzone';

    export default {
        data: function(){
            return {
                dropzone:null,
            }
        },
        props:['gallery'],
        // data : ,

        mounted() {
            console.log(this.gallery);
            this.dropzone = new Dropzone(this.$refs.imageUpload, {
                url: `/api/${this.gallery}/image`
            });
        },

    }

</script>
