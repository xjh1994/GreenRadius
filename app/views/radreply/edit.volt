{{ content() }}
{{ form("radreply/save", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("radreply", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

<div align="center">
    <h1>Edit radreply</h1>
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
        <td>{{ hidden_field("id") }}</td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
