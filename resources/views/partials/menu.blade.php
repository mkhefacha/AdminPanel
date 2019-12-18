<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('contact_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-phone-square">

                        </i>
                        <span>{{ trans('cruds.contactManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('contact_company_access')
                            <li class="{{ request()->is('admin/contact-companies') || request()->is('admin/contact-companies/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.contact-companies.index") }}">
                                    <i class="fa-fw fas fa-building">

                                    </i>
                                    <span>{{ trans('cruds.contactCompany.title') }}</span>
                                </a>
                            </li>
                        @endcan

                            @can('liste_company_access')
                                <li class="{{ request()->is('admin/companie-liste') || request()->is('admin/companie-liste/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.companie-liste.index") }}">
                                        <i class="fas fa-list"></i>


                                        <span>{{ trans('cruds.companieliste.title') }}</span>
                                    </a>
                                </li>
                            @endcan


                            @can('contact_contact_access')
                                <li class="{{ request()->is('admin/contact-contacts') || request()->is('admin/contact-contacts/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.contact-contacts.index") }}">
                                        <i class="fa-fw fas fa-user-plus">

                                        </i>
                                        <span>{{ trans('cruds.contactContact.title') }}</span>
                                    </a>
                                </li>
                            @endcan


                            @can('contact_company_history')
                                <li class="{{ request()->is('admin/companie-history') || request()->is('admin/companie-history/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.companie-history") }}">
                                       <i class="fas fa-history"></i>


                                        <span>{{ trans('cruds.contacthistory.title') }}</span>
                                    </a>
                                </li>
                            @endcan


                    </ul>
                </li>
            @endcan

            @can('evenement_access')
                <li class="treeview">
                    <a href="#">
                        <i class="far fa-calendar-alt"></i>

                        </i>
                        <span>Evénement</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>


                    <ul class="treeview-menu">
                        @can('Sms_access')
                            <li class="{{ request()->is('admin/sms-company') || request()->is('admin/sms-company/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.sms-company.index") }}">
                                    <i class="fas fa-mobile-alt"></i>

                                    </i>
                                    <span>SmS</span>
                                </a>
                            </li>
                        @endcan
                        @can('Email_access')
                                <li class="{{ request()->is('admin/email-companie') || request()->is('admin/email-companie/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.email-companie.index") }}">
                                    <i class="fas fa-envelope"></i>

                                    <span>Email</span>
                                </a>
                            </li>
                        @endcan

                            @can('event_access')
                                <li class="{{ request()->is('admin/event') || request()->is('admin/event/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.event.index") }}">
                                        <i class="fa fa-calendar-o"></i>

                                        <span>Event</span>
                                    </a>
                                </li>
                            @endcan

                    </ul>
                </li>
            @endcan


                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>
    </section>
</aside>