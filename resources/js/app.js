import './bootstrap'
import Vue from 'vue'
import InputArea from "./components/InputArea";
import IncompleteTodos from "./components/IncompleteTodos";
import CompleteTodos from "./components/CompleteTodos";
import Horyu from "./components/Horyu";
import App from "./components/App";





const app = new Vue({
    el: '#app',
    components: {
        InputArea,
        IncompleteTodos,
        CompleteTodos,
        Horyu,
        App,
    }
})
