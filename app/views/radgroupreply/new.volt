
{{ form("radgroupreply/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("radgroupreply", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create radgroupreply</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="groupname">Groupname</label>
        </td>
        <td align="left">
            {{ text_field("groupname", "size" : 30) }}
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
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
