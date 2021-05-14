<template>

        <label class="form-label d-flex flex-wrap" for="typeText">
            <input
                form="inputForm"
                name="input"
                type="text"
                id="typeText"
                class="form-control"
                placeholder="todoを入力"
                v-model="inputText"
            />

            <button
                class="btn rgba-deep-orange-strong text-white btn-md"
                form="inputForm"
                type="submit"
            >追加
            </button>

        </label>

</template>

<script>
export default {
    props: {
    },
    data() {
        return {
            inputText: '',

        }
    },
    computed: {

    },
    methods: {
        clickAdd() {

        },

    }
}
</script>
