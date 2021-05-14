<template>
            <div class="d-flex flex-row mb-3">
                <li class="list-group-item">{{ horyulistitem }}</li>
                <button type="button" class="btn btn-md rgba-deep-orange-strong text-white">完了</button>
                <button type="button" class="btn btn-md rgba-deep-orange-strong text-white">保留</button>
                <button type="button" class="btn btn-md rgba-deep-orange-strong text-white">削除</button>
            </div>
</template>

<script>
export default {
    props: {
        horyulistitem: {
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

    }
}
</script>
