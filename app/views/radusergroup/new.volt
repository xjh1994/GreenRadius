
{{ form("radusergroup/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("radusergroup", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create radusergroup</h1>
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
            <label for="groupname">Groupname</label>
        </td>
        <td align="left">
            {{ text_field("groupname", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="priority">Priority</label>
        </td>
        <td align="left">
            {{ text_field("priority", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
