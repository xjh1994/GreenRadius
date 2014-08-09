{{ content() }}
{{ form("radpostauth/save", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("radpostauth", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

<div align="center">
    <h1>Edit radpostauth</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="username">Username</label>
        </td>
        <td align="left">
            {{ text_field("username", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="pass">Pass</label>
        </td>
        <td align="left">
            {{ text_field("pass", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="reply">Reply</label>
        </td>
        <td align="left">
            {{ text_field("reply", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="authdate">Authdate</label>
        </td>
        <td align="left">
                {{ text_field("authdate", "type" : "date") }}
        </td>
    </tr>

    <tr>
        <td>{{ hidden_field("id") }}</td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
