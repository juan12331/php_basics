<script>
    const getUsuarios = async () => {
        const response = await fetch("api.php");
        const data = await response.json(); // Assuming the response is in JSON format
        return data
    }

    const logUsuarios = async () => {
        const usuarios = await getUsuarios();
        console.log(usuarios);
    }

    logUsuarios();
</script>