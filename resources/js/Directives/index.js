import ThemeApp from "@/Directives/ThemeApp";

export default {
    install(app, options) {
        app.directive('themeApp', ThemeApp);
    }
}
