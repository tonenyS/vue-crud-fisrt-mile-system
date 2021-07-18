function getTitle(vm) {
    const { title } = vm.$options;
    if (title) {
        return typeof title === "function" ? title.call(vm) : title;
    }
}

export default {
    mounted() {
        const title = getTitle(this);
        if (title) {
            document.title = title.concat(
                ` ${process.env.MIX_APP_NAME || "Fist Mile ERP System"}`
            );
        }
    }
};