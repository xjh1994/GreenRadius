
{{ content() }}

<div align="right">
    {{ link_to("radusergroup/new", "Create radusergroup") }}
</div>

{{ form("radusergroup/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search radusergroup</h1>
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
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
