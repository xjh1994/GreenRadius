
{{ content() }}

<div align="right">
    {{ link_to("radreply/new", "Create radreply") }}
</div>

{{ form("radreply/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search radreply</h1>
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
            <label for="attribute">Attribute</label>
        </td>
        <td align="left">
            {{ text_field("attribute", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="op">Op</label>
        </td>
        <td align="left">
                {{ text_field("op") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="value">Value</label>
        </td>
        <td align="left">
            {{ text_field("value", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
