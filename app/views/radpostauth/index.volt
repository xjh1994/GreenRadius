
{{ content() }}

<div align="right">
    {{ link_to("radpostauth/new", "Create radpostauth") }}
</div>

{{ form("radpostauth/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search radpostauth</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="id">Id</label>
        </td>
        <td align="left">
            {{ text_field("id", "type" : "numeric") }}
        </td>
    </tr>
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
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
