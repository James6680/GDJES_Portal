import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            build: {
                chunkSizeWarningLimit: 100000000000000,
                rollupOptions: {
                    output:{
                        manualChunks(id) {
                          if (id.includes('node_modules')) {
                              return id.toString().split('node_modules/')[1].split('/')[0].toString();
                          }
                      }
                    }
                }
            },
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',  
                'resources/js/ph-address-selector.js',
                'resources/js/sample.js',
                'resources/js/Enrollment_ValidationP1.js',
                'resources/js/admin_login_validation.js',
                'resources/js/admin.announcements.js',
                'resources/js/admin.dashboard.js',
                'resources/js/admin.enrollment.management.js',
                'resources/js/Enrollment_ValidationP1.js',
                'resources/js/Enrollment_ValidationP2.js',
                'resources/js/Enrollment_ValidationP3.js',
                'resources/js/Enrollment_ValidationP4.js',
                'resources/js/Enrollment_ValidationP5.js',
                'resources/js/faculty.announcements.js',
                'resources/js/ph-address-selector.js',
                'resources/js/sample.js',
                'resources/js/student_Login_validation.js',
                'resources/js/teacher_login_validation.js',
            ],
        }),
    ],
});
