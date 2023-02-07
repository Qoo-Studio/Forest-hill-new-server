<template>
    <div>
        <h1>This Is Just For Price Tracker Tool test {{someText}}</h1>
    
    </div>
</template>

<script>
export default {
    created() {
        axios.get('/nova-vendor/price-tracker/endpoint')
        .then(res => {
            this.someText = res.data;
        })
    },

    data() {
        return {
            someText: 'Ali Ghahari'
        }
    }
}
</script>

<style>
/* Scoped Styles */
</style>
