<template>

            <div class="d-flex flex-row mb-3">
                <li class="list-group-item">{{ incompletelistitem }}</li>
                <button
                    type="button"
                    class="btn btn-md rgba-deep-orange-strong text-white"
                    @click="movetoComplete"
                    endpoint="endpoint"
                >
                    完了
                </button>
                <button type="button" class="btn btn-md rgba-deep-orange-strong text-white">保留</button>
                <button type="button" class="btn btn-md rgba-deep-orange-strong text-white">削除</button>
            </div>

</template>

<script>
export default {
    props: {
        incompletelistitem: {
            type: String,
        },
        endpoint: {
            type: String,
        }
    },
    data() {
        return {

        }
    },
    computed: {

    },
    methods: {
        movetoComplete() {

        },
        async like() {
            const response = await axios.put(this.endpoint)

        },
    }
}
</script>
