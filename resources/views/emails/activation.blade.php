<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        Hello {{ $user->first_name }}, please confirm your email address by clicking the link below.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        We may need to send you critical information about our service and it is important that we have an accurate email address.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <a href="{{ env('APP_URL') }}/activate/{{ $user->email }}/{{ $code }}" class="btn-primary">Activate account.</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        &mdash; The people at Photographer
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>