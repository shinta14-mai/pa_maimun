<template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <update-profile-information-form :user="$page.props.user" />

                    <jet-section-border />
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <update-password-form class="mt-10 sm:mt-0" />

                    <jet-section-border />
                </div>

                <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                    <two-factor-authentication-form class="mt-10 sm:mt-0" />

                    <jet-section-border />
                </div>

                <logout-other-browser-sessions-form :sessions="sessions" class="mt-10 sm:mt-0" />

                <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                    <jet-section-border />

                    <delete-user-form class="mt-10 sm:mt-0" />
                </template>

                <div class="mt-2 flex justify-end text-base">
          <Link
            class="
              bg-slate-900
              hover:bg-slate-700
              focus:outline-none
              focus:ring-2
              focus:ring-slate-400
              focus:ring-offset-2
              focus:ring-offset-slate-50
              text-white
              font-semibold
              h-12
              px-6
              rounded-lg
              w-full
              flex
              items-center
              justify-center
              sm:w-auto
              text-xs
              md:text-base
              mt-10
            "
            href="/dashboard"
            >Kembali ke Dashboard</Link
          >
        </div>
            </div>
        </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
    import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue'
    import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue'
    import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue'
    import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue'
    import { Link } from "@inertiajs/inertia-vue3"

    export default defineComponent({
        props: ['sessions'],

        components: {
            AppLayout,
            DeleteUserForm,
            JetSectionBorder,
            LogoutOtherBrowserSessionsForm,
            TwoFactorAuthenticationForm,
            UpdatePasswordForm,
            UpdateProfileInformationForm,
            Link,
        },
    })
</script>
