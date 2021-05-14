<template>
    <div>
        <input-area></input-area>

        <incomplete-todos></incomplete-todos>

        <complete-todos></complete-todos>

        <horyu></horyu>
    </div>

</template>

<script>
import InputArea from "./InputArea";
import IncompleteTodos from "./IncompleteTodos";
import CompleteTodos from "./CompleteTodos";
import Horyu from "./Horyu";
export default {
    components: {
        InputArea,
        IncompleteTodos,
        CompleteTodos,
        Horyu,
    }
}
</script>
